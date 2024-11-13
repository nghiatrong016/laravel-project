<?php

namespace App\Http\Controllers;

use Symfony\Component\Process\Process;
use Symfony\Component\HttpFoundation\Response;

class CveController extends Controller
{
    public function runCommand()
    {
        // This command will attempt to run `echo` in the current directory
        $process = new Process(['echo', 'Hello, world']);
        $process->run();

        // Output the result of the command
        return new Response($process->getOutput());
    }
}
