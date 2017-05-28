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
                break;
            case 'lowestRating':
                return $this->browse('rating', 'asc');
                break;
            case 'mostFaved':
                return $this->browse('faved', 'desc');
                break;
            case 'leastFaved':
                return $this->browse('faved', 'asc');
                break;
            case 'newest':
                return $this->browse('updated_at', 'desc');
                break;
            case 'oldest':
                return $this->browse('updated_at', 'asc');
                break;
            case 'nameAZ':
                return $this->browse('name', 'asc');
                break;
            case 'nameZA':
                return $this->browse('name', 'desc');
                break;
            default:
                abort(403, 'No such browsing method.');
                break;
        }
    }

    public function browse($orderBy, $order)
    {
        $companies = Company::orderBy($orderBy, $order)->paginate(3);

        return view('companies.browse', compact('companies'));
    }

    public function browseCampaigns($type)
    {
        $companies = Company::withCount('sup_campaigns')->get();
            dd($companies);
    }
}
