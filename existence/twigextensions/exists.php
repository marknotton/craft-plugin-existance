<?php
namespace Craft;

use Twig_Extension;
use Twig_Filter_Method;

class exists extends \Twig_Extension {

  public function getName() {
    return Craft::t('Exists');
  }

  public function getFilters() {
    return array(
      'exists' => new Twig_Filter_Method( $this, 'exists')
    );
  }

  // When check for a files existance, just use this fill. If it doesn't exist, false is return. Otherwise return the url
  // {{ (images ~ '/logo.jpg')|exists }}
  public function exists($file) {

    if (gettype($file) == 'string') {

      $filePath = '/'.rtrim(ltrim(parse_url($file)["path"], '/'), '/');

      if (is_dir($_SERVER['DOCUMENT_ROOT'].$filePath) || is_dir(getcwd().$filePath)) {
        return true;
      }
      // Native Craft helper that returns the url as a string if file exists
      // return IOHelper::fileExists($filePath);

      // Standard PHP approach that returns boolean
      return file_exists($_SERVER['DOCUMENT_ROOT'].$filePath) || file_exists(getcwd().$filePath);

    }
  }


}
