#!/usr/bin/env php
<?php

function templates(string $file) {
    switch ($file) {
        case 'README.md':
            return 'IyA6cGFja2FnZS1uYW1lCgpbIVtMYXRlc3QgVmVyc2lvbiBvbiBOUE1dKGh0dHBzOi8vaW1nLnNoaWVsZHMuaW8vbnBtL3YvOnBhY2thZ2Utc2x1Zz9zdHlsZT1mbGF0LXNxdWFyZSldKGh0dHBzOi8vd3d3Lm5wbWpzLmNvbS9wYWNrYWdlLzpwYWNrYWdlLXNsdWcpClshW0Rvd25sb2FkcyBwZXIgd2Vla10oaHR0cHM6Ly9pbWcuc2hpZWxkcy5pby9ucG0vZHcvOnBhY2thZ2Utc2x1Zz9zdHlsZT1mbGF0LXNxdWFyZSldKGh0dHBzOi8vd3d3Lm5wbWpzLmNvbS9wYWNrYWdlLzpwYWNrYWdlLXNsdWcpClshW0dpdEh1YiBUZXN0cyBBY3Rpb24gU3RhdHVzXShodHRwczovL2ltZy5zaGllbGRzLmlvL2dpdGh1Yi9hY3Rpb25zL3dvcmtmbG93L3N0YXR1cy86YXV0aG9yLXVzZXJuYW1lLzpwYWNrYWdlLXNsdWcvcnVuLXRlc3RzLnltbD9icmFuY2g9bWFpbiZsYWJlbD10ZXN0JnN0eWxlPWZsYXQtc3F1YXJlKV0oaHR0cHM6Ly9naXRodWIuY29tLzphdXRob3ItdXNlcm5hbWUvOnBhY2thZ2Utc2x1Zy9hY3Rpb25zP3F1ZXJ5PXdvcmtmbG93JTNBcnVuLXRlc3RzK2JyYW5jaCUzQW1haW4pClshW0dpdEh1YiBQcmV0dGllciBBY3Rpb24gU3RhdHVzXShodHRwczovL2ltZy5zaGllbGRzLmlvL2dpdGh1Yi9hY3Rpb25zL3dvcmtmbG93L3N0YXR1cy86YXV0aG9yLXVzZXJuYW1lLzpwYWNrYWdlLXNsdWcvcnVuLXByZXR0aWVyLnltbD9icmFuY2g9bWFpbiZsYWJlbD1wcmV0dGllciZzdHlsZT1mbGF0LXNxdWFyZSldKGh0dHBzOi8vZ2l0aHViLmNvbS86YXV0aG9yLXVzZXJuYW1lLzpwYWNrYWdlLXNsdWcvYWN0aW9ucz9xdWVyeT13b3JrZmxvdyUzQXJ1bi1wcmV0dGllciticmFuY2glM0FtYWluKQoKOnBhY2thZ2UtZGVzY3JpcHRpb24KCiMjIEluc3RhbGxhdGlvbgoKYGBgYmFzaApucG0gaW5zdGFsbCA6cGFja2FnZS1zbHVnCmBgYAoKIyMgVXNhZ2UKCltFbnRlciB5b3VyIHRleHQgaGVyZV0KCiMjIENoYW5nZWxvZwoKPiBQbGVhc2Ugc2VlIFtDSEFOR0VMT0ddKENIQU5HRUxPRy5tZCkgZm9yIENoYW5nZWxvZy4KCiMjIENvbnRyaWJ1dGluZwoKPiBJZiB5b3UgYXJlIGludGVyZXN0ZWQgaW4gdGhpcyBwcm9qZWN0IGFuZCB3YW50IHRvIGltcHJvdmUgaXQsIGZpeCBlcnJvcnMgb3IgYnVncywgcGxlYXNlIGNvbnRyaWJ1dGUuCgojIyBDcmVkaXRzCgotICAgWzphdXRob3ItbmFtZV0oaHR0cHM6Ly9naXRodWIuY29tLzphdXRob3ItdXNlcm5hbWUpCi0gICBbQWxsIENvbnRyaWJ1dG9yc10oLi4vLi4vY29udHJpYnV0b3JzKQoKIyMgTGljZW5jZQoKVGhlIE1JVCBMaWNlbnNlIChNSVQpLgoKPiBQbGVhc2Ugc2VlIFtMaWNlbnNlIEZpbGVdKExJQ0VOU0UubWQpIGZvciBtb3JlIGluZm9ybWF0aW9uLgo=';
            break;

        case 'LICENCE.md':
            return 'VGhlIE1JVCBMaWNlbnNlIChNSVQpCgpDb3B5cmlnaHQgKGMpIDphdXRob3ItbmFtZSA8OmF1dGhvci1lbWFpbD4KClBlcm1pc3Npb24gaXMgaGVyZWJ5IGdyYW50ZWQsIGZyZWUgb2YgY2hhcmdlLCB0byBhbnkgcGVyc29uIG9idGFpbmluZyBhIGNvcHkgb2YgdGhpcyBzb2Z0d2FyZSBhbmQgYXNzb2NpYXRlZCBkb2N1bWVudGF0aW9uIGZpbGVzICh0aGUgIlNvZnR3YXJlIiksIHRvIGRlYWwgaW4gdGhlIFNvZnR3YXJlIHdpdGhvdXQgcmVzdHJpY3Rpb24sIGluY2x1ZGluZyB3aXRob3V0IGxpbWl0YXRpb24gdGhlIHJpZ2h0cyB0byB1c2UsIGNvcHksIG1vZGlmeSwgbWVyZ2UsIHB1Ymxpc2gsIGRpc3RyaWJ1dGUsIHN1YmxpY2Vuc2UsIGFuZC9vciBzZWxsIGNvcGllcyBvZiB0aGUgU29mdHdhcmUsIGFuZCB0byBwZXJtaXQgcGVyc29ucyB0byB3aG9tIHRoZSBTb2Z0d2FyZSBpcyBmdXJuaXNoZWQgdG8gZG8gc28sIHN1YmplY3QgdG8gdGhlIGZvbGxvd2luZyBjb25kaXRpb25zOgoKVGhlIGFib3ZlIGNvcHlyaWdodCBub3RpY2UgYW5kIHRoaXMgcGVybWlzc2lvbiBub3RpY2Ugc2hhbGwgYmUgaW5jbHVkZWQgaW4gYWxsIGNvcGllcyBvciBzdWJzdGFudGlhbCBwb3J0aW9ucyBvZiB0aGUgU29mdHdhcmUuCgpUSEUgU09GVFdBUkUgSVMgUFJPVklERUQgIkFTIElTIiwgV0lUSE9VVCBXQVJSQU5UWSBPRiBBTlkgS0lORCwgRVhQUkVTUyBPUiBJTVBMSUVELCBJTkNMVURJTkcgQlVUIE5PVCBMSU1JVEVEIFRPIFRIRSBXQVJSQU5USUVTIE9GIE1FUkNIQU5UQUJJTElUWSwgRklUTkVTUyBGT1IgQSBQQVJUSUNVTEFSIFBVUlBPU0UgQU5EIE5PTklORlJJTkdFTUVOVC4gSU4gTk8gRVZFTlQgU0hBTEwgVEhFIEFVVEhPUlMgT1IgQ09QWVJJR0hUIEhPTERFUlMgQkUgTElBQkxFIEZPUiBBTlkgQ0xBSU0sIERBTUFHRVMgT1IgT1RIRVIgTElBQklMSVRZLCBXSEVUSEVSIElOIEFOIEFDVElPTiBPRiBDT05UUkFDVCwgVE9SVCBPUiBPVEhFUldJU0UsIEFSSVNJTkcgRlJPTSwgT1VUIE9GIE9SIElOIENPTk5FQ1RJT04gV0lUSCBUSEUgU09GVFdBUkUgT1IgVEhFIFVTRSBPUiBPVEhFUiBERUFMSU5HUyBJTiBUSEUgU09GVFdBUkUu';
            break;
    
        case 'CHANGELOG.md':
            return 'IyBDaGFuZ2Vsb2cKCj4gU2VlIGFsbCBjaGFuZ2VzIGxpc3RlZCBiZWxvdy4=';
            break;
    }
}

function ask(string $question, string $default = '') {
    $answer = ! $default
        ? readline($question . ': ')
        : readline($question . " ($default): ");

    return $answer ? $answer : $default;
}

function confirm(string $question, bool $default = false) {
    $answer = $default
        ? ask("$question (Y/n)")
        : ask("$question (y/N)");

    return $answer
        ? strtolower($answer) === 'y'
        : $default;
}

function run(string $command) {
    return trim((string) shell_exec($command));
}

function path(string $file) {
    return __DIR__ . '/' . $file;
}

function echoln(string $line) {
    echo $line . PHP_EOL;
}

function slugify(string $chars) {
    $chars = mb_strtolower($chars, 'UTF-8');
    $chars = preg_replace('/\s+/', '-', $chars);
    $chars = preg_replace('/[^a-z0-9\-]/', '', $chars);
    $chars = preg_replace('/\-+/', '-', $chars);
    $chars = trim($chars, '-');
    return $chars;
}

function generate_file(string $file, string $encoded64) {
    file_put_contents(path($file), base64_decode($encoded64));
}

function replace_vars(string $file, array $replacements) {
    if (is_file(path($file))) {
        file_put_contents(
            path($file),
            str_replace(
                array_keys($replacements),
                array_values($replacements),
                file_get_contents(path($file))
            )
        );
    }
}

function remove_file(string $file) {
    if (file_exists($file) || is_file($file)) {
        unlink($file);
    }
}

function browse_files() {
    $files = [];
    foreach (glob(__DIR__ . '/**/*', GLOB_BRACE) as $file) {
        if (strpos($file, 'node_modules/') !== false) {
            continue;
        }
        if (is_file($file)) {
            $files[] = $file;
        }
    }
    return $files;
}

/**
 * Configurations.
 */

$default = [
    'authorUsername' => run('git config user.name'),
    'authorEmail' => run('git config user.email'),
    'licence' => 'MIT',
];

$authorName = ask('Author Name');

$authorUsername = ask('Author Username', $default['authorUsername']);

$authorEmail = ask('Author Email');

$packageName = ask('Package Name');

$packageDescription = ask('Package description');

if (! confirm('Do you confirm installation with this values ?', true)) {
    exit(1);
}

/**
 * Installation.
 */

echoln('Configurations processing...');
echoln(' ');

foreach ([
    'README.md',
    'LICENCE.md',
    'CHANGELOG.md'
] as $file) {
    generate_file($file, templates($file));
}

foreach (browse_files() as $file) {
    replace_vars($file, [
        ':package-name' => trim($packageName),
        ':package-slug' => slugify(trim($packageName)),
        ':package-description' => trim($packageDescription),
        ':author-username' => trim($authorUsername),
        ':author-name' => trim($authorName),
        ':author-email' => trim($authorEmail),
        ':licence' => $default['licence'],
    ]);
}

if (confirm('Execute `npm install` and `npm run dev` ?', true)) {
    run('npm install && npm run dev');
}

if (confirm('Delete this script ?', true)) {
    remove_file(__FILE__);
}