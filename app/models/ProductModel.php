<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Model: ProductModel
 * 
 * Automatically generated via CLI.
 */
class ProductModel extends Model {
    protected $table = 'products';
    protected $primary_key = 'id';
    protected $fillable = [];
    protected $guarded = ['id'];
    protected $has_soft_delete = false;

    public function __construct()
    {
        parent::__construct();
    }
}