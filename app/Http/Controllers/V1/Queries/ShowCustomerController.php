<?php

namespace App\Http\Controllers\V1\Queries;

use App\Contracts\Queries\QueryInterface;
use App\Http\Controllers\Controller;
use App\Http\Resources\CustomerResource;
use App\Traits\Controllers\FormatsQueryResponses;
use Illuminate\Http\Response;

class ShowCustomerController extends Controller
{
    use FormatsQueryResponses;

    public function __construct(private QueryInterface $queryHandler)
    {
    }

    /**
     * Display the specified resource.
     */
    public function __invoke(string $id): Response
    {
        return $this->successfulQueryResponse(
            data: $this->queryHandler->query(),
            apiResourceClass: CustomerResource::class
        );
    }
}
