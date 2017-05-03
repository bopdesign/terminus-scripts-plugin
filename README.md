# Terminus Upstream Deployment Plugin

Terminus Scripts - A Terminus plugin that has commonly used commands put into aliases.

## Examples
### Default Running
```
$ terminus connection:set site-name.dev git
```
or using an alias
```
$ terminus mode site-name.dev git
```


## Installation
For help installing, see [Manage Plugins](https://pantheon.io/docs/terminus/plugins/)
```
mkdir -p ~/.terminus/plugins
composer create-project -d ~/.terminus/plugins bopdesign/terminus-scripts-plugin:~1
```

## Help
Run `terminus list connection:set` for a complete list of available commands. Use `terminus help <command>` to get help on one command.
