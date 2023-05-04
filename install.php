#!/usr/bin/env php
<?php

function templates(string $file) {
    switch ($file) {
        case 'README.md':
            return 'IyA6cGFja2FnZS1zbHVnCgpbIVtMYXRlc3QgVmVyc2lvbl0oaHR0cHM6Ly9pbWcuc2hpZWxkcy5pby9ucG0vdi86cGFja2FnZS1zbHVnP3N0eWxlPWZsYXQtc3F1YXJlKV0oaHR0cHM6Ly93d3cubnBtanMuY29tL3BhY2thZ2UvOnBhY2thZ2Utc2x1ZykKWyFbRG93bmxvYWRzIHBlciB3ZWVrXShodHRwczovL2ltZy5zaGllbGRzLmlvL25wbS9kdy86cGFja2FnZS1zbHVnP3N0eWxlPWZsYXQtc3F1YXJlKV0oaHR0cHM6Ly93d3cubnBtanMuY29tL3BhY2thZ2UvOnBhY2thZ2Utc2x1ZykKWyFbR2l0SHViIFRlc3RzIEFjdGlvbiBTdGF0dXNdKGh0dHBzOi8vaW1nLnNoaWVsZHMuaW8vZ2l0aHViL2FjdGlvbnMvd29ya2Zsb3cvc3RhdHVzLzphdXRob3ItdXNlcm5hbWUvOnBhY2thZ2Utc2x1Zy9ydW4tdGVzdHMueW1sP2JyYW5jaD1tYWluJmxhYmVsPXRlc3Qmc3R5bGU9ZmxhdC1zcXVhcmUpXShodHRwczovL2dpdGh1Yi5jb20vOmF1dGhvci11c2VybmFtZS86cGFja2FnZS1zbHVnL2FjdGlvbnM/cXVlcnk9d29ya2Zsb3clM0FydW4tdGVzdHMrYnJhbmNoJTNBbWFpbikKWyFbR2l0SHViIFByZXR0aWVyIEFjdGlvbiBTdGF0dXNdKGh0dHBzOi8vaW1nLnNoaWVsZHMuaW8vZ2l0aHViL2FjdGlvbnMvd29ya2Zsb3cvc3RhdHVzLzphdXRob3ItdXNlcm5hbWUvOnBhY2thZ2Utc2x1Zy9maXgtc3R5bGluZy1jb2RlLnltbD9icmFuY2g9bWFpbiZsYWJlbD1jb2RlIHN0eWxlJnN0eWxlPWZsYXQtc3F1YXJlKV0oaHR0cHM6Ly9naXRodWIuY29tLzphdXRob3ItdXNlcm5hbWUvOnBhY2thZ2Utc2x1Zy9hY3Rpb25zP3F1ZXJ5PXdvcmtmbG93JTNBZml4LXN0eWxpbmctY29kZSticmFuY2glM0FtYWluKQoKKio6cGFja2FnZS1kZXNjcmlwdGlvbioqCgojIyBJbnN0YWxsYXRpb24KCmBgYGJhc2gKIyBSdW46IAokIG5wbSBpbnN0YWxsIDpwYWNrYWdlLXNsdWcKYGBgCgojIyBVc2FnZQoKW1lvdXIgdGV4dCBoZXJlXQoKIyMgQ2hhbmdlbG9nCgo+IFBsZWFzZSBzZWUgW0NIQU5HRUxPR10oQ0hBTkdFTE9HLm1kKSBmb3IgY2hhbmdlcy4KCiMjIENvbnRyaWJ1dGluZwoKPiBJZiB5b3UgYXJlIGludGVyZXN0ZWQgaW4gdGhpcyBwcm9qZWN0IGFuZCB3YW50IHRvIGltcHJvdmUgaXQsIGZpeCBlcnJvcnMgb3IgYnVncywgKip5b3UncmUgd2VsY29tZSB0byBjb250cmlidXRlKiouCgojIyBDcmVkaXRzCgotICAgWzphdXRob3ItbmFtZV0oaHR0cHM6Ly9naXRodWIuY29tLzphdXRob3ItdXNlcm5hbWUpCi0gICBbQWxsIENvbnRyaWJ1dG9yc10oLi4vLi4vY29udHJpYnV0b3JzKQoKIyMgTGljZW5jZQoKVGhlIE1JVCBMaWNlbnNlIChNSVQpLgoKPiBQbGVhc2Ugc2VlIFtMaWNlbnNlIEZpbGVdKExJQ0VOU0UubWQpIGZvciBtb3JlIGluZm9ybWF0aW9uLgo=';
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

function repo_url(string $username, string $repoName) {
    return "https://github.com/$username/$repoName.git";
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

function replace_package_json(array $vars) {
    $data = json_decode(file_get_contents(path('package.json')), true);
    $data['name'] = $vars[':package-slug'];
    $data['description'] = $vars[':package-description'];
    $data['keywords'][] = $vars[':package-slug'];
    $data['keywords'][] = $vars[':package-name'];
    $data['author']['name'] = $vars[':author-name'];

    if ($vars[':repo-name']) {
        $data['repository']['url'] = repo_url($vars[':author-username'], $vars[':repo-name']);
    } else {
        unset($data['repository']);
    }

    if ($vars[':author-email']) {
        $data['author']['email'] = $vars[':author-email'];
    } else {
        unset($data['author']['email']);
    }

    file_put_contents(path('package.json'), json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE));
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

$authorEmail = ask('Author Email', $default['authorEmail']);

$packageName = ask('Package Name');

$packageDescription = ask('Package description');

$authorUsername = ask('Github Author Username', $default['authorUsername']);

$repoName = ask('Github repository name', $packageName);

if (! confirm('Do you confirm installation with this values ?', true)) {
    exit(1);
}

/**
 * Installation.
 */

echoln('Configurations processing...');
echoln(' ');

$vars = [
    ':package-name' => trim($packageName),
    ':package-slug' => slugify(trim($packageName)),
    ':package-description' => trim($packageDescription),
    ':author-username' => trim($authorUsername),
    ':author-name' => trim($authorName),
    ':author-email' => trim($authorEmail),
    ':repo-name' => trim($repoName),
    ':licence' => $default['licence'],
];

foreach ([
    'README.md',
    'LICENCE.md',
    'CHANGELOG.md'
] as $file) {
    generate_file($file, templates($file));
}

foreach (browse_files() as $file) {
    replace_vars($file, $vars);
}

replace_package_json($vars);

if (confirm('Execute `npm install` and `npm run dev` ?', true)) {
    run('npm install && npm run dev');
}

if (confirm('Delete this script ?', true)) {
    remove_file(__FILE__);
}