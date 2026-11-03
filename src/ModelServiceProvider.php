<?php

declare(strict_types=1);

namespace Tavaan\Engine\Database\ORM;

use Tavaan\Core\Contracts\Container\ContainerInterface;
use Tavaan\Core\Contracts\Config\RepositoryInterface as ConfigRepository;
use Tavaan\Engine\Database\ORM\Contracts\ModelInterface;
use Tavaan\Core\Provider\ServiceProvider;

/**
 * ModelServiceProvider — ثبت سرویس‌های موتور Model.
 */
final class ModelServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        $this->app->singleton(ModelInterface::class, function (ContainerInterface $app) {
            /** @var ConfigRepository $config */
            $config = $app->get(ConfigRepository::class);
            return new Model($config);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function boot(): void
    {
    }

    /**
     * {@inheritdoc}
     */
    public function provides(): array
    {
        return [
            ModelInterface::class,
        ];
    }
}