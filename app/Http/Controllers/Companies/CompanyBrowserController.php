<?php

namespace App\Http\Controllers\Companies;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Company;

class CompanyBrowserController extends Controller
{
    public function main(Request $request)
    {

        switch ($request->input('type','highestRating')) {
            case 'highestRating':
                return $this->browse('rating', 'desc');

            case 'lowestRating':
                return $this->browse('rating', 'asc');

            case 'mostFaved':
                return $this->browse('faved', 'desc');

            case 'leastFaved':
                return $this->browse('faved', 'asc');

            case 'newest':
                return $this->browse('updated_at', 'desc');

            case 'oldest':
                return $this->browse('updated_at', 'asc');

            case 'nameAZ':
                return $this->browse('name', 'asc');

            case 'nameZA':
                return $this->browse('name', 'desc');

            case 'supported':
                return $this->browseCampaigns('sup_campaigns');
            case 'against':
                return $this->browseCampaigns('agn_campaigns');

            default:
                abort(403, 'No such browsing method.');
                break;
        }
    }

    public function browse($orderBy, $order)
    {
        $companies = Company::orderBy($orderBy, $order)->paginate(5);

        return view('companies.companyBrowser', compact('companies'));
    }

    public function browseCampaigns($type)
    {
        $companies = Company::withCount($type)->orderBy($type."_count")->paginate(5);

        return view('companies.companyBrowser', compact('companies'));

    }
}
