<?php


namespace HipexDeploy\Deployer\Task;

use Deployer\Task\Task;
use HipexDeploy\Exception\InvalidConfigurationException;
use HipexDeployConfiguration\TaskConfigurationInterface;

interface ConfigurableTaskInterface extends TaskInterface
{
    /**
     * Configure deployer using Hipex configuration
     * Throw a InvalidConfigurationException when configuration is invalid to break the deploy early on
     *
     * @param TaskConfigurationInterface $config
     * @throws InvalidConfigurationException
     */
    public function configureTask(TaskConfigurationInterface $config);

    /**
     * Define deployer task using Hipex configuration
     *
     * @param TaskConfigurationInterface $config
     * @return Task|null
     */
    public function build(TaskConfigurationInterface $config): ?Task;

    /**
     * @param TaskConfigurationInterface $config
     * @return bool
     */
    public function supports(TaskConfigurationInterface $config): bool;
}