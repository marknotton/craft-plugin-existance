<?php
namespace Craft;

class ExistencePlugin extends BasePlugin {
  public function getName() {
    return Craft::t('Existence');
  }

  public function getVersion() {
    return '0.1';
  }

  public function getSchemaVersion() {
    return '0.1';
  }

  public function getDescription() {
    return 'Simple filter that checks if a file or directory string exists locally.';
  }

  public function getDeveloper() {
    return 'Yello Studio';
  }

  public function getDeveloperUrl() {
    return 'http://yellostudio.co.uk';
  }

  public function getDocumentationUrl() {
    return 'https://github.com/marknotton/craft-plugin-existence';
  }

  public function getReleaseFeedUrl() {
    return 'https://raw.githubusercontent.com/marknotton/craft-plugin-existence/master/existence/releases.json';
  }

  public function addTwigExtension() {
    Craft::import('plugins.existence.twigextensions.exists');
    return new exists();
  }
}
