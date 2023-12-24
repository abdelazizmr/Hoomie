@extends('layouts.base')
@section('content')
<br>
<br>
<br>
<br>
    <div class="container">
        <h2 class="my-2"> Your Infos </h2>

        <form method="post" action="{{ route('interests.update') }}">
            @csrf
            @method('PUT')

                <div class="mb-3">
        <label for="city" class="form-label">City : </label>
        <select class="form-select" id="city" name="city">
            <option value="">Choose your city</option>
            @foreach($cities as $city)
                <option value="{{ $city->id }}">{{ $city->name }}</option>
            @endforeach
        </select>
        @error('city') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <div class="mb-3">
        <label for="gender" class="form-label">Gender : </label>
        <select class="form-select" id="gender" name="gender">
             <option value="">Choose your gender</option>
             <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
        @error('gender') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <div class="mb-3">
        <label for="category" class="form-label">Category : </label>
        <select class="form-select" id="category" name="category">
             <option value="">Choose your category</option>
             <option value="employee">employee</option>
            <option value="student">student</option>
        </select>
        @error('category') <span class="text-danger">{{ $message }}</span> @enderror
    </div>


    <div class="mb-3">
        <label for="budget" class="form-label">Budget : </label>
        <input type="text" class="form-control" id="budget" name="budget" value="{{ old('budget', $interests->budget ?? '') }}">
        @error('budget') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    
    <div class="mb-3">
        <label for="age" class="form-label">Age : </label>
        <input type="text" class="form-control" id="age" name="age">
        @error('age') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <div class="mb-3">
        <label for="move_in" class="form-label">Move in date : </label>
        <input type="date" class="form-control" id="move_in" name="move_in">
        @error('move_in') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <div class="mb-3">
        <label for="bio" class="form-label">Bio : </label>
        <textarea class="form-control" id="bio" name="bio" placeholder="Tell us about yourself ...">{{ old('bio', $interests->bio ?? '') }}</textarea>
        @error('bio') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    

    <h2 class="my-2"> Your Interests</h2>

            <div class="mb-3">
                <label for="hobbies" class="form-label">Hobbies : </label>
                <input type="text" class="form-control" id="hobbies" name="hobbies" value="{{ old('hobbies', $interests->hobbies ?? '') }}">
                @error('hobbies') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Do you smoke ? </label>
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
                <label class="form-label">Are You An Introvert ? </label>
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
                <label class="form-label">Do you prefer Separated food ?</label>
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
                <label class="form-label">Do you need WiFi ?</label>
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
                    <option value="meticulous" {{ isset($interests->cleaning) && $interests->cleaning === 'meticulous' ? 'selected' : '' }}>Meticulous</option>
                    <option value="minimalist" {{ isset($interests->cleaning) && $interests->cleaning === 'minimalist' ? 'selected' : '' }}>Minimalist</option>
                    <option value="occasional" {{ isset($interests->cleaning) && $interests->cleaning === 'occasional' ? 'selected' : '' }}>Occasional</option>
                    <!-- Add more cleaning preference options as needed -->
                </select>
                @error('cleaning') <span class="text-danger">{{ $message }}</span> @enderror
            </div>


            <div class="mb-3">
                <label for="religion" class="form-label">Religion : </label>
                <input type="text" class="form-control" id="religion" name="religion" value="{{ old('religion', $interests->religion ?? '') }}">
                @error('religion') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label for="visiting_family_times" class="form-label">Visiting Family Times ( week ) : </label>
                <input type="text" class="form-control" id="visiting_family_times" name="visiting_family_times" value="{{ old('visiting_family_times', $interests->visiting_family_times ?? '') }}">
                @error('visiting_family_times') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <!-- Ajoutez d'autres champs d'intérêt de la même manière -->

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection

