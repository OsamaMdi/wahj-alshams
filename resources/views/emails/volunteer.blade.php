<x-mail::message>
# طلب تطوع جديد

**الاسم:** {{ $data['name'] }}  
**البريد الإلكتروني:** {{ $data['email'] }}  
**العمر:** {{ $data['age'] }}  
**مدة التطوع المفضلة:** {{ $data['volunteerPeriod'] }}

---

**لماذا يريد التطوع؟**

{{ $data['whyVolunteer'] }}

<x-mail::button :url="'mailto:' . $data['email']">
الرد على المتقدم
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
