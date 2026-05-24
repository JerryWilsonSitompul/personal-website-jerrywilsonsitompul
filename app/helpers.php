<?php

if (!function_exists('debug_point')) {
    /**
     * Debug helper function to create inspection points
     * Usage: debug_point('checkpoint_name', $variable_to_inspect);
     */
    function debug_point($label, $data = null) {
        if (config('app.debug')) {
            $trace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 2);
            $caller = $trace[1] ?? $trace[0];
            
            $debugInfo = [
                'label' => $label,
                'file' => basename($caller['file'] ?? 'unknown'),
                'line' => $caller['line'] ?? 'unknown',
                'function' => $caller['function'] ?? 'unknown',
                'data' => $data,
                'timestamp' => now()->toDateTimeString()
            ];
            
            \Log::debug('DEBUG_POINT: ' . $label, $debugInfo);
            
            // Also dump to screen if running in browser
            if (!app()->runningInConsole()) {
                dump($debugInfo);
            }
        }
    }
}

if (!function_exists('dd_if_debug')) {
    /**
     * Dump and die only if debug mode is enabled
     */
    function dd_if_debug(...$vars) {
        if (config('app.debug')) {
            dd(...$vars);
        }
    }
}

if (!function_exists('debug_log')) {
    /**
     * Quick debug logging function
     */
    function debug_log($message, $context = []) {
        if (config('app.debug')) {
            \Log::debug($message, $context);
        }
    }
}
