@extends('admin.master')
@section('content')
<div class="row">
    <!-- Basic Layout -->
    <div class="col-xxl">
        <form action="{{ route('admin.daily_expense.store') }}" method="post">
            @csrf
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Basic Layout</h5>
                    <small class="text-muted float-end">Default label</small>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="bajar_date">Bajar Date</label>
                        <div class="col-sm-10">
                            <input type="date" name="bajar_date" class="form-control" 
                                placeholder="Bajar Date" />
                            @error('bajar_date')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="title">Title</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <input type="text" name="title" id="title" class="form-control"
                                    placeholder="Title" />
                            </div>
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="quantity">Quantity</label>
                        <div class="col-sm-10">
                            <input type="text" name="quantity" id="quantity" class="form-control" 
                                placeholder="Quantity" />
                            @error('quantity')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Unit</label>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input type="radio" id="kg" name="unit" value="KG" class="form-check-input">
                                <label for="kg" class="form-check-label">KG</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" id="gm" name="unit" value="Gm" class="form-check-input">
                                <label for="gm" class="form-check-label">Gm</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" id="pcs" name="unit" value="Pcs" class="form-check-input">
                                <label for="pcs" class="form-check-label">Pcs</label>
                            </div>
                            @error('unit')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="price">Price</label>
                        <div class="col-sm-10">
                            <input type="text" name="price" id="price" class="form-control" 
                                placeholder="Price" />
                            @error('price')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="total">Total</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <input type="text" name="total" id="total" class="form-control"
                                    placeholder="Total" readonly />
                            </div>
                        </div>
                    </div>

                    {{-- <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="status">Status</label>
                        <div class="col-sm-10">
                            <input type="text" name="status" class="form-control" 
                                placeholder="Status" />
                        </div>
                    </div> --}}
                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

    <script>
        // JavaScript to calculate total based on price and quantity
        document.getElementById('price').addEventListener('input', updateTotal);
        document.getElementById('quantity').addEventListener('input', updateTotal);

        function updateTotal() {
            const price = parseFloat(document.getElementById('price').value) || 0;
            const quantity = parseFloat(document.getElementById('quantity').value) || 0;
            const total = price * quantity;
            document.getElementById('total').value = total;
        }
    </script>
@endsection
