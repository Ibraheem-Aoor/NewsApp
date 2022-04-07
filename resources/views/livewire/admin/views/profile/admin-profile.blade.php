<div>
    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-8">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Ibraheem Prfile</h6>
                    <form wire:submit.prevent="saveProfile()">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Name</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" value="ibraheem"
                                wire:model.lazy="name" readonly>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="admin@admin" wire:model.lazy="email" readonly>
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" id="save">Save Changes</button>
                    </form>
                </div>
            </div>
            <div class="col-xl-4">

            </div>
        </div>
    </div>
</div>

@push('js')
    <script>
        $(document).ready(function() {
            $('#save').hide();
            $(':input').click(function() {
                $(this).removeAttr('readonly');
                $('#save').show();
            })
        });
    </script>
@endpush
