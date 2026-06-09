   <div class="mb-4">
       @if (!$label)
           <label class="block text-gray-700 font-medium mb-2">
               Category
           </label>
       @endif

       <select name="blog_category_id"
           class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 ">
           <option value="">select category</option>
           @foreach ($categories as $category)
               <option value="{{ $category->id }}" {{ $selected == $category->id ? 'selected' : '' }}>
                   {{ $category->name }}</option>
           @endforeach
       </select>
       @error('blog_category_id')
           <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
       @enderror
   </div>
