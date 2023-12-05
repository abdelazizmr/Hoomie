@extends('layouts.base')
@section('content')
<br>
<br>
<br>
<br>
    <div class="container">
        <h2> Your Interests</h2>

        <form method="post" action="{{ route('interests.update') }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="hobbies" class="form-label">Hobbies:</label>
                <input type="text" class="form-control" id="hobbies" name="hobbies" value="{{ old('hobbies', $interests->hobbies ?? '') }}">
                @error('hobbies') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Do you smoke?</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="smoking_yes" name="smoking" value="1" {{ isset($interests->smoking) && $interests->smoking == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="smoking_yes">Yes</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="smoking_no" name="smoking" value="0" {{ isset($interests->smoking) && $interests->smoking == 0 ? 'checked' : '' }}>
                    <label class="form-check-label" for="smoking_no">No</label>
                </div>
                @error('smoking') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Introvert?</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="introvert_yes" name="introvert" value="1" {{ isset($interests->introvert) && $interests->introvert == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="introvert_yes">Yes</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="introvert_no" name="introvert" value="0" {{ isset($interests->introvert) && $interests->introvert == 0 ? 'checked' : '' }}>
                    <label class="form-check-label" for="introvert_no">No</label>
                </div>
                @error('introvert') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Separate food preferences?</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="food_separated_yes" name="food_separated" value="1" {{ isset($interests->food_separated) && $interests->food_separated == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="food_separated_yes">Yes</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="food_separated_no" name="food_separated" value="0" {{ isset($interests->food_separated) && $interests->food_separated == 0 ? 'checked' : '' }}>
                    <label class="form-check-label" for="food_separated_no">No</label>
                </div>
                @error('food_separated') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Do you need WiFi?</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="wifi_yes" name="wifi" value="1" {{ isset($interests->wifi) && $interests->wifi == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="wifi_yes">Yes</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="wifi_no" name="wifi" value="0" {{ isset($interests->wifi) && $interests->wifi == 0 ? 'checked' : '' }}>
                    <label class="form-check-label" for="wifi_no">No</label>
                </div>
                @error('wifi') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label for="cleaning" class="form-label">Cleaning Preferences:</label>
                <select class="form-select" id="cleaning" name="cleaning">
                    <option value="neat_and_tidy" {{ isset($interests->cleaning) && $interests->cleaning === 'neat_and_tidy' ? 'selected' : '' }}>Neat and Tidy</option>
                    <option value="casual" {{ isset($interests->cleaning) && $interests->cleaning === 'casual' ? 'selected' : '' }}>Casual</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="religion" class="form-label">Religion:</label>
                <input type="text" class="form-control" id="religion" name="religion" value="{{ old('religion', $interests->religion ?? '') }}">
                @error('religion') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label for="visiting_family_times" class="form-label">Visiting Family Times:</label>
                <input type="text" class="form-control" id="visiting_family_times" name="visiting_family_times" value="{{ old('visiting_family_times', $interests->visiting_family_times ?? '') }}">
                @error('visiting_family_times') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <!-- Ajoutez d'autres champs d'intérêt de la même manière -->

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection

