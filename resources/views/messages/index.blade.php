@extends('Layouts.app')
@section('content')																																																					
<div class="page-container">
@include('Layouts.sidebar')

 <div class="main-content-inner">
            <div class="row">
                <div class="col-lg-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h3>
                                Mailbox
                                <small>{{$messages->count()}} Recieved messages</small>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
              
                <div class="col-lg-13 col-sm-12 mt-mob-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="mail_content">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h3 class="mail_head">Recieved <span class="inbox_numb bg-primary">{{$messages->count()}}</span></h3>
                                    </div>
                                   

                                    <div class="mail_list col-lg-12 table-responsive">
                                       <table class="table table-striped table-hover">
                                        <tbody>
                                            @foreach ($messages as $message )
                                               
                                            <tr class="unread" id="mail_msg_1" onclick="window.location='/message/{{$message->message->id}}';" style="cursor: pointer;">
                                                <td class="">
                                                    <div class="custom-control custom-checkbox primary-checkbox">
                                                        {{$loop->iteration}}
                                                        <label class="custom-control-label" for="customCheck1"></label>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div class="star"><i class="fa fa-star-o icon-accent"></i></div>
                                                </td>
                                                <td class="open-view">{{"John Smith"}}</td>
                                                <td class="open-view">
                                                    @if ($message->status_id===1)
                                                    <span class="label label-primary mr-2">Approved</span>&nbsp;
                                                    
                                                @endif
                                                @if ($message->status_id===0)
                                                    <span class="label label-primary mr-2">Incomplete Approval</span>&nbsp;
                                                    
                                                @endif
                                                    <span class="msgtext">{{$message->subject}}</span></td>
                                                <td class="open-view"><span class="msg_time">{{ Carbon\Carbon::parse($message->created_at)->isoFormat('Do MMMM YYYY') }}</span></td>
                                            </tr>
                                             
                                              @endforeach
                                        </tbody>
                                    </table>

                                        <nav aria-label="Page navigation" class="mt-4">
                                            <ul class="pagination justify-content-center">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="#" tabindex="-1">
                                                        <span class="ti-angle-left"></span>
                                                    </a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">
                                                        <span class="ti-angle-right"></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


@endsection
