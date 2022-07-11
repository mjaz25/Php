<?php

class Sosmed
{
  var string $name;
}

// Final Class
final class Facebook extends Sosmed
{
  // Final Function 
  final public function login(string $username, string $password): void
  {
  }
}

// Error
// class FakeFacebook extends Facebook {
    
// }
