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
                return $this->browse('rating', 'desc',$request->input('type','highestRating'));

            case 'lowestRating':
                return $this->browse('rating', 'asc',$request->input('type','highestRating'));

            case 'mostFaved':
                return $this->browse('faved', 'desc',$request->input('type','highestRating'));

            case 'leastFaved':
                return $this->browse('faved', 'asc',$request->input('type','highestRating'));

            case 'newest':
                return $this->browse('updated_at', 'desc',$request->input('type','highestRating'));

            case 'oldest':
                return $this->browse('updated_at', 'asc',$request->input('type','highestRating'));

            case 'nameAZ':
                return $this->browse('name', 'asc',$request->input('type','highestRating'));

            case 'nameZA':
                return $this->browse('name', 'desc',$request->input('type','highestRating'));

            case 'supported':
                return $this->browseCampaigns('sup_campaigns',$request->input('type','highestRating'));
            case 'against':
                return $this->browseCampaigns('agn_campaigns',$request->input('type','highestRating'));

            default:
                abort(403, 'No such browsing method.');
                break;
        }
    }

    public function browse($orderBy, $order, $path)
    {

        $companies = Company::orderBy($orderBy, $order)->paginate(5);

        $companies->withPath('?type='.$path);

        return view('companies.companyBrowser', compact('companies'));
    }

    public function browseCampaigns($type, $path)
    {

        $companies = Company::withCount($type)->orderBy($type."_count")->paginate(5);

        $companies->withPath('?type='.$path);

        return view('companies.companyBrowser', compact('companies'));

    }
}
