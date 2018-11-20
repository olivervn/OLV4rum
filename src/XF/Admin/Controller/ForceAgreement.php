<?php

namespace XF\Admin\Controller;

class ForceAgreement extends AbstractController
{
	public function actionPrivacyPolicy()
	{
		$privacyPolicyUrl = $this->app->container('privacyPolicyUrl');

		if (!$privacyPolicyUrl)
		{
			return $this->error(\XF::phrase('you_do_not_currently_have_privacy_policy_url'));
		}

		if ($this->isPost())
		{
			$this->getOptionRepo()->updateOption('privacyPolicyLastUpdate', time());

			return $this->redirect($this->buildLink('force-agreement/privacy-policy'));
		}
		else
		{
			return $this->view('XF:ForceAgreement/PrivacyPolicy', 'force_agreement_privacy_policy');
		}
	}

	public function actionTerms()
	{
		$tosUrl = $this->app->container('tosUrl');

		if (!$tosUrl)
		{
			return $this->error(\XF::phrase('you_do_not_currently_have_terms_and_rules_url'));
		}

		if ($this->isPost())
		{
			$this->getOptionRepo()->updateOption('termsLastUpdate', time());

			return $this->redirect($this->buildLink('force-agreement/terms'));
		}
		else
		{
			return $this->view('XF:ForceAgreement/Terms', 'force_agreement_terms');
		}
	}

	/**
	 * @return \XF\Mvc\Entity\Repository|\XF\Repository\Option
	 */
	protected function getOptionRepo()
	{
		return $this->repository('XF:Option');
	}
}