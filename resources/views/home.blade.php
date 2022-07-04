@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><span class="badge rounded-pill bg-primary">Election Data</span>
                    </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th>Candidate For Vote</th>
                                    <th>Total Vote</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <th>
                                        Candidate C
                                    </th>
                                   <td>{{ $candidatec_vote_count }}</td>
                                  </tr>
                                  <tr>
                                    <th>
                                       Candidate D
                                    </th>
                                    <td>{{ $candidated_vote_count }}</td>
                                  </tr>
                                </tbody>
                              </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
