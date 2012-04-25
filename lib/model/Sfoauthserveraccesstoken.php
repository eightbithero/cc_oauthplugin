<?php



/**
 * Skeleton subclass for representing a row from the 'sfOauthServerAccessToken' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.6.4 on:
 *
 * Tue Apr 24 12:48:25 2012
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.lib.model
 */
class Sfoauthserveraccesstoken extends BaseSfoauthserveraccesstoken {

	/**
   * Returns true if the token has credential.
   *
   * @param  mixed $credentials
   * @param  bool  $useAnd       specify the mode, either AND or OR
   * @return bool
   */
  public function hasCredential($credentials, $useAnd = true)
  {
	 $tokenCredentials = explode(" ", $this->getScope());

    if (null === $tokenCredentials)
    {
      return false;
    }

    if (!is_array($credentials))
    {
      return in_array($credentials, $tokenCredentials);
    }

    // now we assume that $credentials is an array
    $test = false;

    foreach ($credentials as $credential)
    {
      // recursively check the credential with a switched AND/OR mode
      $test = $this->hasCredential($credential, $useAnd ? false : true);

      if ($useAnd)
      {
        $test = $test ? false : true;
      }

      if ($test) // either passed one in OR mode or failed one in AND mode
      {
        break; // the matter is settled
      }
    }

    if ($useAnd) // in AND mode we succeed if $test is false
    {
      $test = $test ? false : true;
    }

    return $test;

  }
} // Sfoauthserveraccesstoken