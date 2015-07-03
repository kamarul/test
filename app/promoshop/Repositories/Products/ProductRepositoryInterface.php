<?php namespace App\mycareer\Repositories\Employers;

use App\Http\Requests\Employers\CompanyRequest;
 
interface CompanyRepositoryInterface {

	public function listIndustries();
	public function listLocations();
	public function companyDetails($companies_id);
	public function update($companies_id,CompanyRequest $request);
}