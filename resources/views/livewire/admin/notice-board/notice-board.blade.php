<div>
    {{-- Do your work, then step back. --}}
    <div class="row align-expenses-center m-l-0">
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4 text-right">
            <button  class="btn btn-sm btn-info mb-3" onclick="Livewire.dispatch('openModal', { component: 'admin.notice-board.add-notice-board' })"><i class="feather icon-plus"></i> Add Notice Board</button>
        </div>
    </div>
    @foreach($notices as $notice)
    <div class="row">
        <div class="col-sm-12">
            <div class="card mb-4">
                <div class="card-body">
                    
                    <div class="media align-items-center">
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <a href="javascript:void(0)" class="d-block text-primary text-big line-height-1">
                                <i class="ion ion-md-add"></i>
                            </a>
                            <div class="text-xlarge font-weight-bolder line-height-1 my-2">
                               {{ \Carbon\Carbon::parse($notice->created_at)->gt(\Carbon\Carbon::now()->subDays(2)) ? 'NEW' : 'OLD' }}
                            </div>
                            <a href="javascript:void(0)" class="d-block text-primary text-big line-height-1">
                                <i class="ion ion-md-remove"></i>
                            </a>
                        </div>
                        <div class="media-body ml-4">
                            <p style="font-weight:bold; text-transform:uppercase; text-decoration:underline;">{{ $notice->notice_type }}</p>
                            <a href="#!" style="color:orange; font-weight:bold; font-size:16px;"><h4>{{ $notice->title }}.</h4></a>
                            <div class="my-2">
                            {{ $notice->body }}
                            </div>
                            @php
                            $viewers =\Modules\NoticeBoard\App\Models\NoticeBoardRead::with('creator')->select('read_by')->distinct()->where('notice_board_id',$notice->id)->get();
                            @endphp
                            <div class="small">
                                <a href="javascript:void(0)" class="text-muted">
                                    <i class="ion ion-ios-contact text-secondary text-big align-middle"></i>&nbsp; 
                                    {{ $notice->creator->name }}
                                </a>&nbsp; 
                                <a href="javascript:void(0)" class="text-muted">
                                    <i class="ion ion-ios-text text-success text-big align-middle"></i>&nbsp;
                                    {{ countNoticeBoardRead($notice->id)}}
                                </a>
                                <span class="text-muted ml-3">
                                    <i class="ion ion-md-time text-primary text-big align-middle"></i>&nbsp; 
                                    {{\Carbon\Carbon::parse($notice->created_at)->diffForHumans()}}
                                </span>
                                <span class="text-muted ml-3">
                                    @foreach($viewers as $viewer)
                                    <span  class="text-primary text-big align-middle font-weight-bold">#{{$viewer->creator->name}}</span>
                                    @endforeach
                                </span>
                                <span class="text-muted ml-3">
                                    
                                    <form wire:submit.prevent="markNoticeBoardAsRead({{ $notice->id }})">
                                        <div class="form-group">
                                        <input type="hidden" wire:model="notice_board_id" value="{{ $notice->id }}" class="form-control" id="notice_board_id" placeholder="">
                                        </div>
                                        @error('notice_board_id') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                        <button type="submit" class="btn btn-default">
                                            <span wire:loading wire:target="markNoticeBoardAsRead({{ $notice->id }})"><i class="fa fa-spinner fa-spin"></i> Thank You For Reading ..</span>
                                            <span wire:loading.remove wire:target="markNoticeBoardAsRead({{ $notice->id }})"> <i class="ion ion-ios-checkmark-circle-outline text-warning text-small align-middle" style="font-size:14px; font-weight:bold;"></i>&nbsp; mark as read</span>
                                        </button>
                                    </form>
                                </span>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <div class="col-md-12 mt-2">
            <div class="row mb-2">
                
                <div class="col-md-4 pull-right text-end">
                {{$notices->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
