<?php namespace TheMiss\Service\Form;

use Illuminate\Support\ServiceProvider;
use TheMiss\Service\Form\Login\LoginForm;
use TheMiss\Service\Form\Login\LoginFormLaravelValidator;
use TheMiss\Service\Form\Register\RegisterForm;
use TheMiss\Service\Form\Register\RegisterFormLaravelValidator;
use TheMiss\Service\Form\Group\GroupForm;
use TheMiss\Service\Form\Group\GroupFormLaravelValidator;
use TheMiss\Service\Form\User\UserForm;
use TheMiss\Service\Form\User\UserFormLaravelValidator;
use TheMiss\Service\Form\ResendActivation\ResendActivationForm;
use TheMiss\Service\Form\ResendActivation\ResendActivationFormLaravelValidator;
use TheMiss\Service\Form\ForgotPassword\ForgotPasswordForm;
use TheMiss\Service\Form\ForgotPassword\ForgotPasswordFormLaravelValidator;
use TheMiss\Service\Form\ChangePassword\ChangePasswordForm;
use TheMiss\Service\Form\ChangePassword\ChangePasswordFormLaravelValidator;
use TheMiss\Service\Form\SuspendUser\SuspendUserForm;
use TheMiss\Service\Form\SuspendUser\SuspendUserFormLaravelValidator;

class FormServiceProvider extends ServiceProvider
{

    /**
     * Register the binding
     *
     * @return void
     */
    public function register()
    {
        $app = $this->app;

        // Bind the Login Form
        $app->bind('TheMiss\Service\Form\Login\LoginForm', function ($app) {
            return new LoginForm(
                new LoginFormLaravelValidator($app['validator']),
                $app->make('TheMiss\Repo\Session\SessionInterface')
            );
        });

        // Bind the Register Form
        $app->bind('TheMiss\Service\Form\Register\RegisterForm', function ($app) {
            return new RegisterForm(
                new RegisterFormLaravelValidator($app['validator']),
                $app->make('TheMiss\Repo\User\UserInterface')
            );
        });

        // Bind the Group Form
        $app->bind('TheMiss\Service\Form\Group\GroupForm', function ($app) {
            return new GroupForm(
                new GroupFormLaravelValidator($app['validator']),
                $app->make('TheMiss\Repo\Group\GroupInterface')
            );
        });

        // Bind the User Form
        $app->bind('TheMiss\Service\Form\User\UserForm', function ($app) {
            return new UserForm(
                new UserFormLaravelValidator($app['validator']),
                $app->make('TheMiss\Repo\User\UserInterface')
            );
        });

        // Bind the Resend Activation Form
        $app->bind('TheMiss\Service\Form\ResendActivation\ResendActivationForm', function ($app) {
            return new ResendActivationForm(
                new ResendActivationFormLaravelValidator($app['validator']),
                $app->make('TheMiss\Repo\User\UserInterface')
            );
        });

        // Bind the Forgot Password Form
        $app->bind('TheMiss\Service\Form\ForgotPassword\ForgotPasswordForm', function ($app) {
            return new ForgotPasswordForm(
                new ForgotPasswordFormLaravelValidator($app['validator']),
                $app->make('TheMiss\Repo\User\UserInterface')
            );
        });

        // Bind the Change Password Form
        $app->bind('TheMiss\Service\Form\ChangePassword\ChangePasswordForm', function ($app) {
            return new ChangePasswordForm(
                new ChangePasswordFormLaravelValidator($app['validator']),
                $app->make('TheMiss\Repo\User\UserInterface')
            );
        });

        // Bind the Suspend User Form
        $app->bind('TheMiss\Service\Form\SuspendUser\SuspendUserForm', function ($app) {
            return new SuspendUserForm(
                new SuspendUserFormLaravelValidator($app['validator']),
                $app->make('TheMiss\Repo\User\UserInterface')
            );
        });

    }

}