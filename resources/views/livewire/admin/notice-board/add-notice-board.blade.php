<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <div class="card">
        <div class="card-body">
            <form wire:submit.prevent="addNoticeBoard">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="floating-label" for="NoticeType">Type of Notice</label>
                            <select class="form-control" wire:model="notice_type" id="notice_type">
                                <option value="">Select Type</option>
                                <option value="memorandum">Memo</option>
                                <option value="announcement">Announcement</option>
                                <option value="reminder">Reminder</option>
                                <option value="staff meeting">Staff Meeting</option>
                            </select>
                        </div>
                        @error('notice_type') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group fill">
                            <label class="floating-label" for="Title">Title</label>
                            <input type="text" wire:model="title" class="form-control" id="title" placeholder="">
                        </div>
                        @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="floating-label" for="Body">Body</label>
                            <textarea class="form-control" wire:model="body" id="body" rows="4"></textarea>
                        </div>
                        @error('body') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary">
                            <span wire:loading wire:target="addNoticeBoard"><i class="fa fa-spinner fa-spin"></i> Wait...it is submitting Now</span>
                            <span wire:loading.remove wire:target="addNoticeBoard">Post</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
