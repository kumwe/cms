<?php

declare(strict_types=1);

namespace Kumwe\CMS\Kernel\Configuration;

/**
 * Deployment mode a Kumwe process runs under, as declared by the `APP_ENV` variable.
 *
 * The selected case is a policy switch rather than a label. `ConfigurationFactory` waives the
 * mandatory extension runtime signing key and the deployment identity variables only for `Testing`,
 * and `ApplicationConfiguration` insists on an HTTPS base URL only for `Production`. Any other
 * spelling of `APP_ENV` is rejected by `RuntimeEnvironment::from()` while the container is booting.
 *
 * @since  2.0.1
 */
enum RuntimeEnvironment: string
{
    /**
     * Developer instance, where debug output is expected and a plaintext base URL is still accepted.
     *
     * @var    string
     * @since  2.0.1
     */
    case Development = 'development';

    /**
     * Live deployment serving real traffic, where the strictest configuration rules are enforced.
     *
     * @var    string
     * @since  2.0.1
     */
    case Production = 'production';

    /**
     * Automated test run, where secrets and deployment identities fall back to fixed placeholders.
     *
     * @var    string
     * @since  2.0.1
     */
    case Testing = 'testing';
}
