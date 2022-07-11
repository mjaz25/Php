<?php

namespace Data\Admin {
  class Person
  {
    var string $nama;
    var ?string $alamat = null;

    public function __construct(string $namaBaru, ?string $alamatBaru)
    {
      $this->nama = $namaBaru;
      $this->alamat = $alamatBaru;
    }
  }

  class Location
  {
  }

  class Biography
  {
  }
}

namespace Data\Member {
  class Person
  {
  }

  class Location
  {
  }

  class Biography
  {
  }
}
