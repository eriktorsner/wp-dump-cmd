<?php

if ( ! class_exists( 'WP_CLI' ) ) {
	return;
}

/**
 * Dump commands
 *
 */
$dumpCommands = function ($args, $assoc_args)
{
    CLI_Command::cmd_dump();
};


WP_CLI::add_command( 'cmd-dump-ex', $dumpCommands);

