<!-- <div>
	<ul>
		<li>
			<a href="{{route('language', 'sq')}}">Shqip</a>
		</li>
		<li>
			<a href="{{route('language', 'sr')}}">Srpski</a>
		</li>
		<li>
			<a href="{{route('language', 'en')}}">English</a>
		</li>
	</ul>
</div> -->

<input type="hidden" name="_token" id="csrf_toKen" value="{{ csrf_token()}}">
<select id="languageSwitcher">
	<option></option>
	<option value="sq">Shqip</option>
	<option value="sr">Srpski</option>
	<option value="en">English</option>
</select>
