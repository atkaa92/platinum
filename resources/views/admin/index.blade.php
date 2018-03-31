@extends('layouts.admin')

@section('admin')
    <div class="title-block">
        <h3 class="title"> Dashboard </h3>
        <p class="title-description"> Hi {{ auth()->user()->name }} </p>
    </div>
    @include('admin/messages')    
    <section class="section">
        <div class="row sameheight-container">
            <div class="col-md-6">
                <div class="card tasks sameheight-item" data-exclude="xs,sm">
                    <div class="card-header bordered">
                        <div class="header-block">
                            <h3 class="title"> Tasks </h3>
                            <p class="title-description"> List of tasks</p>
                        </div>
                        <div class="header-block pull-right">
                            <button class="btn btn-primary btn-sm rounded pull-right addTask"> Add new </button>
                        </div>
                    </div>
                    <div class="card-block">
                        <div class="tasks-block">
                            <ul class="item-list">
                                @foreach($tasks as $t)
                                    <li class="item" style="border-bottom: 1px solid #d7dde4">
                                        <div class="item-row taskBody">
                                            <div class="item-col item-col-title">
                                                <label>
                                                    <input data-id="{{ $t->id }}" class="checkbox" type="checkbox" {{ $t->completed ? 'checked' : '' }}>
                                                    <span class="taskBodyText">{{ $t->task }} </span>
                                                </label>
                                            </div>
                                            <div class="item-col fixed item-col-actions-dropdown">
                                                <div class="item-actions-dropdown">                                                    
                                                    <a class="item-actions-toggle-btn">
                                                                <span class="inactive">
                                                                    <i class="fa fa-cog"></i>
                                                                </span>
                                                        <span class="active">
                                                                    <i class="fa fa-chevron-circle-right"></i>
                                                                </span>
                                                    </a>
                                                    <i class="pull-right taskDate">{{ date("d.m.Y", strtotime($t['created_at'])) }}</i>
                                                    
                                                    <div class="item-actions-block">
                                                        <ul class="item-actions-list">
                                                            <li>
                                                                <a class="removeTask" href="javascript:void(0)"  data-id="{{ $t->id }}">
                                                                    <i class="fa fa-trash-o "></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="editTask" data-id="{{ $t->id }}">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="showTask" data-id="{{ $t->id }}">
                                                                    <i class="fa fa-eye"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-12 col-md-6 stats-col">
                <div class="card sameheight-item stats" data-exclude="xs">
                    <div class="card-block">
                        <div class="title-block">
                            <h4 class="title"> Stats </h4>
                            <p class="title-description"> Website metrics for Platinum</p>
                        </div>
                        <div class="row row-sm stats-container">
                            <div class="col-12 col-sm-6 stat-col">
                                <div class="stat-icon">
                                    <i class="fa fa-rocket"></i>
                                </div>
                                <div class="stat">
                                    <div class="value"> {{ $active }}</div>
                                    <div class="name"> Active products</div>
                                </div>
                                <div class="progress stat-progress">
                                    <div class="progress-bar" style="width: 100%;"></div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 stat-col">
                                <div class="stat-icon">
                                    <i class="fa fa-shopping-cart"></i>
                                </div>
                                <div class="stat">
                                    <div class="value"> {{ $sold }}</div>
                                    <div class="name"> Products sold</div>
                                </div>
                                <div class="progress stat-progress">
                                    <div class="progress-bar" style="width: 100%;"></div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6  stat-col">
                                <div class="stat-icon">
                                    <i class="fa fa-line-chart"></i>
                                </div>
                                <div class="stat">
                                    <div class="value"> $ {{ $income }}</div>
                                    <div class="name"> Total income</div>
                                </div>
                                <div class="progress stat-progress">
                                    <div class="progress-bar" style="width: 100%;"></div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6  stat-col">
                                <div class="stat-icon">
                                    <i class="fa fa-users"></i>
                                </div>
                                <div class="stat">
                                    <div class="value"> {{ $users }}</div>
                                    <div class="name"> Total users</div>
                                </div>
                                <div class="progress stat-progress">
                                    <div class="progress-bar" style="width: 100%;"></div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6  stat-col">
                                <div class="stat-icon">
                                    <i class="fa fa-thumbs-up"></i>
                                </div>
                                <div class="stat">
                                    <div class="value"> {{ $taskC }}</div>
                                    <div class="name"> Completed tasks</div>
                                </div>
                                <div class="progress stat-progress">
                                    <div class="progress-bar" style="width: 100%;"></div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 stat-col">
                                <div class="stat-icon">
                                    <i class="fa fa-thumbs-down"></i>
                                </div>
                                <div class="stat">
                                    <div class="value"> {{ $taskA }}</div>
                                    <div class="name"> Active tasks</div>
                                </div>
                                <div class="progress stat-progress">
                                    <div class="progress-bar" style="width: 100%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--  add or edit modal  --}}
    <div class="modal fade" id="modal-task">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">New Task</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                </div>
                <form method="post" class="addingOrUpdateingTask">
                    {{ csrf_field() }}
                    <div class="modal-body modal-tab-container ">
                        <div class="container">
                            <div class="form-group">
                                <label class="control-label"></label>
                                <textarea  name="task" type="text" class="form-control boxed" placeholder="Task" rows="8" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{--  delete modal  --}}
    <div class="modal fade" id="delete-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">
                        <i class="fa fa-warning"></i> Alert</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure want to do this?</p>
                </div>
                <div class="modal-footer">
                    <a type="button" class="btn btn-primary confirmDelete">Yes</a>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>

    {{--  show  modal  --}}
    <div class="modal fade" id="show-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script type="text/javascript" src="{{ asset("js/dashboard.js") }}"></script>
    @endpush
@endsection