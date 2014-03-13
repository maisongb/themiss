<?php namespace TheMiss\Repo;

use Illuminate\Support\ServiceProvider;
use TheMiss\Repo\Session\SentrySession;
use TheMiss\Repo\User\SentryUser;
use TheMiss\Repo\Group\SentryGroup;

class RepoServiceProvider extends ServiceProvider
{

    /**
     * Register the binding
     */
    public function register()
    {
        $app = $this->app;

        // Bind the Session Repository
        $app->bind('TheMiss\Repo\Session\SessionInterface', function ($app) {
            return new SentrySession(
                $app['sentry']
            );
        });

        // Bind the User Repository
        $app->bind('TheMiss\Repo\User\UserInterface', function ($app) {
            return new SentryUser(
                $app['sentry']
            );
        });

        // Bind the Group Repository
        $app->bind('TheMiss\Repo\Group\GroupInterface', function ($app) {
            return new SentryGroup(
                $app['sentry']
            );
        });
    }
}
