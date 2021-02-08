@extends('admin.layout.master')

@section('content')
 <table id="user_grid" class="table table-bordered table-striped table-hover">
                                 <thead>
                                    <tr class="info">
                                       <th>Sl No</th>
                                       <th>Company Name</th>
                                       <th>Assign Date</th>
                                       <th>Experience</th>
                                       <th>CTC</th>
                                       <th>Notice Period</th>
                                       <th>Location</th>
                                       <th>Assign User</th>
                                       <th>Job Description</th>
                                       <th>Traker</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                  <?php $i=1; ?>
                                   @foreach($appls as $job)
                                    
                                   <tr>
                                     <td>{{ $i++ }}</td>
                                     <td>{{ $job->compname }}</td>
                                     <td>{{ $job->assndate }}</td>
                                     <td>{{ $job->exprenc }}</td>
                                     <td>{{ $job->ctc }}</td>
                                     <td>{{ $job->noticperiod }}</td>
                                     <td>{{ $job->locn }}</td>
                                     <td>{{ $job->user_name }}</td>
                                     <td>{{ $job->description }}</td>
                                     <td><a href="{{ url('public/upload/'.$job->file) }}" download="{{ $job->file }}">{{ $job->file }}</a></td>
                                   </tr>
                               
                                   @endforeach
                                 
                                 </tbody>
                              </table>


@endsection 