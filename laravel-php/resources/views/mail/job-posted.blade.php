<x-mail::message>
# Congratulations!!!

{{$job->title}}

Your job si now live on our website.

<x-mail::button :url="url('/jobs/' .$job->id)">
Job listing
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
