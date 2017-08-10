<?php

namespace OFS\Services;

use OFS\Contracts\Repositories\IVendorRepository;

class VendorService {
    private $vendor;

    /**
     * VendorService constructor.
     * @param IVendorRepository $vendor
     */
    public function __construct(IVendorRepository $vendor)
    {
        $this->vendor = $vendor;
    }

    /**
     * @return mixed
     */
    public function index()
    {
        $vendors = $this->vendor->index();

        return $vendors;
    }

    /**
     * @param $data
     * @return bool
     */
    public function create($data)
    {
        try {
            $vendor = $this->vendor->createVendor($data);

            return $vendor;
        } catch (\Exception $e) {
            return false;
        }
    }
}