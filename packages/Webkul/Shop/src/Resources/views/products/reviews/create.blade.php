@extends('shop::layouts.master')

@section('page_title')
    {{ __('shop::app.reviews.add-review-page-title') }} - {{ $product->name }}
@endsection

@section('content-wrapper')

    <section class="review">

        <div class="review-layouter mb-20">
            <div class="product-info">

                <?php $productBaseImage = productimage()->getProductBaseImage($product); ?>

                <div class="product-image">
                    <a href="{{ route('shop.productOrCategory.index', $product->url_key) }}" title="{{ $product->name }}">
                        <img src="{{ $productBaseImage['medium_image_url'] }}" alt="" />
                    </a>
                </div>

                <div class="product-name mt-20">
                    <a href="{{ route('shop.productOrCategory.index', $product->url_key) }}" title="{{ $product->name }}">
                        <span>{{ $product->name }}</span>
                    </a>
                </div>

                @include('shop::products.price')

            </div>

            <div class="review-form">
                <form method="POST" action="{{ route('shop.reviews.store', $product->product_id ) }}" @submit.prevent="onSubmit" enctype="multipart/form-data">
                    @csrf

                    <div class="heading mt-10 mb-25">
                        <span>{{ __('shop::app.reviews.write-review') }}</span>
                    </div>

                    <div class="control-group" :class="[errors.has('rating') ? 'has-error' : '']">
                        <label for="title" class="required">
                            {{ __('admin::app.customers.reviews.rating') }}
                        </label>

                        <div class="stars">
                            @for ($i = 1; $i <= 5; $i++)
                                <span class="star star-{{ $i }}" for="star-{{ $i }}" onclick="calculateRating(id)" id="{{ $i }}"></span>
                            @endfor
                        </div>

                        <input type="hidden" id="rating" name="rating" v-validate="'required'">

                        <div class="control-error" v-if="errors.has('rating')">@{{ errors.first('rating') }}</div>
                    </div>

                    <div class="control-group" :class="[errors.has('title') ? 'has-error' : '']">
                        <label for="title" class="required">
                            {{ __('shop::app.reviews.title') }}
                        </label>
                        <input  type="text" class="control" name="title" v-validate="'required'" value="{{ old('title') }}">
                        <span class="control-error" v-if="errors.has('title')">@{{ errors.first('title') }}</span>
                    </div>

                    @if (core()->getConfigData('catalog.products.review.guest_review') && ! auth()->guard('customer')->user())
                        <div class="control-group" :class="[errors.has('name') ? 'has-error' : '']">
                            <label for="title" class="required">
                                {{ __('shop::app.reviews.name') }}
                            </label>
                            <input  type="text" class="control" name="name" v-validate="'required'" value="{{ old('name') }}">
                            <span class="control-error" v-if="errors.has('name')">@{{ errors.first('name') }}</span>
                        </div>
                    @endif

                    <div class="control-group" :class="[errors.has('comment') ? 'has-error' : '']">
                        <label for="comment" class="required">
                            {{ __('admin::app.customers.reviews.comment') }}
                        </label>
                        <textarea type="text" class="control" name="comment" v-validate="'required'" value="{{ old('comment') }}">
                        </textarea>
                        <span class="control-error" v-if="errors.has('comment')">@{{ errors.first('comment') }}</span>
                    </div>

                    <div class="control-group {!! $errors->has('images.*') ? 'has-error' : '' !!}">
                        <label>{{ __('admin::app.catalog.categories.image') }}</label>

                        <image-wrapper></image-wrapper>

                        <span class="control-error" v-if="{!! $errors->has('images.*') !!}">
                            @php $count=1 @endphp
                            @foreach ($errors->get('images.*') as $key => $message)
                                @php echo str_replace($key, 'Image'.$count, $message[0]); $count++ @endphp
                            @endforeach
                        </span>
                    </div>

                    <button type="submit" class="btn btn-lg btn-primary">
                        {{ __('shop::app.reviews.submit') }}
                    </button>

                </form>
            </div>
        </div>

    </section>

@endsection


@push('scripts')

    <script>

        function calculateRating(id) {
            var a = document.getElementById(id);
            document.getElementById("rating").value = id;

            for (let i=1 ; i <= 5 ; i++) {
                if (id >= i) {
                    document.getElementById(i).style.color="#242424";
                } else {
                    document.getElementById(i).style.color="#d4d4d4";
                }
            }
        }

    </script>

@endpush
