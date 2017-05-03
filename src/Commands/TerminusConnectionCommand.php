<?php

namespace Pantheon\TerminusConnectionSet\Commands;

use Pantheon\Terminus\Commands\TerminusCommand;
use Pantheon\Terminus\Site\SiteAwareInterface;
use Pantheon\Terminus\Site\SiteAwareTrait;
use Pantheon\Terminus\Exceptions\TerminusException;
use Pantheon\Terminus\Exceptions\TerminusProcessException;
use Symfony\Component\Console\Helper\ProgressBar;

/**
 * Class ConnectionCommand
 * Sets Git or SFTP connection mode on a development environment (excludes Test and Live).
 */
class ConnectionCommand extends TerminusCommand
{
    /**
     * Set Git or SFTP connection mode on a development environment
     *
     * @authorize
     *
     * @command connection:set
     * @aliases mode
     *
     * @param object $site_id   Site in the format `site.env`
     * @param string $mode      Mode to set the connection to `git` or `sftp`
     */

    public function connectionSet($site_id, $mode)
    {
//        $this->log()->notice( '$site_id: ' . $site_id );
//        $this->log()->notice( '$mode: ' . $mode );

        $start        = time();
        $site         = $this->sites->get($site_id);
        $data         = $site->serialize();
        $output       = $this->output;
        $git_location = '/tmp/' . $data['name'];

        $this->log()->notice('{site} Starting', ['site' => $data['name']]);
        $this->log()->notice('{site} Data: ', ['site' => $data]);

//        if ($site->getEnvironments()->get( $env )->isInitialized()) {
//            $this->log()->notice( '{site}: {env} backup created', [ 'site' => $data['name'], 'env' => $env ] );
//        }
    }
}
