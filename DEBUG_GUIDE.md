# Debugging Setup Guide

## Prerequisites ✅
- Xdebug 3.4.3 is installed and configured
- PHP Debug extension is installed in VS Code
- Debug mode is enabled (`APP_DEBUG=true` in .env)

## How to Debug

### 1. Start Debugging Session
1. Open VS Code
2. Go to Run and Debug panel (Ctrl+Shift+D)
3. Select "Listen for Xdebug" configuration
4. Click the green play button to start listening

### 2. Set Breakpoints
- Click in the gutter next to line numbers to set breakpoints
- Breakpoints will appear as red dots
- Good places to set breakpoints in AuthController:
  - Line ~22: `$credentials = $request->validate([...])`
  - Line ~29: `Log::debug('Login attempt for email: ' . $credentials['email']);`
  - Line ~31: `if (Auth::attempt($credentials, $request->boolean('remember'))) {`
  - Line ~35: `$user = Auth::user();`

### 3. Trigger Debugging
- Start your Laravel server: `php artisan serve`
- Navigate to http://127.0.0.1:8000/login
- Fill in the login form and submit
- Execution will pause at your breakpoints

### 4. Debugging Features
- **Step Over (F10)**: Execute current line and move to next
- **Step Into (F11)**: Enter into function calls
- **Step Out (Shift+F11)**: Exit current function
- **Continue (F5)**: Continue execution until next breakpoint
- **Variables Panel**: Inspect current variables
- **Watch Panel**: Add expressions to watch
- **Call Stack**: See the execution path

## Debug Helper Functions

Use these custom debug functions in your code:

```php
// Create inspection points
debug_point('user_data', $user);

// Quick debug logging
debug_log('Processing login', ['email' => $email]);

// Dump and die only in debug mode
dd_if_debug($credentials, $user);
```

## Log Files
- Debug logs are written to `storage/logs/laravel.log`
- Use `tail -f storage/logs/laravel.log` to monitor in real-time

## VS Code Debug Configurations

### Available Configurations:
1. **Listen for Xdebug**: For web requests and general debugging
2. **Launch currently open script**: For debugging single PHP files
3. **Debug Laravel Artisan Command**: For debugging Artisan commands

## Troubleshooting

### If breakpoints aren't working:
1. Ensure Xdebug is listening: Check terminal for connection attempts
2. Verify port 9003 is not blocked by firewall
3. Check VS Code is listening for connections
4. Restart Laravel server after setting breakpoints

### Common Issues:
- **Connection refused**: VS Code debugger not running
- **Breakpoint not hit**: Path mapping might be incorrect
- **Xdebug not loading**: Check PHP configuration

## Advanced Debugging

### For AJAX requests:
- Set breakpoints in controller methods
- Use browser developer tools Network tab
- Check XHR/Fetch requests

### For Artisan commands:
```bash
php -dxdebug.mode=debug -dxdebug.start_with_request=yes artisan your:command
```

### Environment Variables for Debugging:
```bash
export XDEBUG_MODE=debug
export XDEBUG_CONFIG="client_host=127.0.0.1 client_port=9003"
```
