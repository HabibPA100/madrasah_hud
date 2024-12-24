<div class="container">
    <section class="sectionN02">
      @foreach($student_info as $student)
        <div class="container mt-3 scale_admission_page">
           <div class="card text-dark formBgColor admission-Page-bg-color">
            <div class="card-body">
              <h6 class="text-danger">Form Number:- {{ $student->id }}</h6>
              <p>Student Information</p>
              <div class="container">
                <form>
                  <label class="float-start">ক্লাসের নাম </label><br>
                  <input type="text" value="{{ $student->class_name }}" class="w-100" > <br>
                  <label for="studentName" class="float-start">শিক্ষার্থীর নাম</label> <br>
                  <input type="text" value="{{ $student->studentName }}" class="w-100"> <br>
                  <label for="studentDoB" class="float-start">জন্ম তারিখ</label> <br>
                  <input type="text" value="{{ $student->studentDoB }}" class="w-100"><br>
                  <label for="birthCertificate">শিক্ষার্থীর জন্ম নিবন্ধন সনদ নাম্বার</label><br>
                  <input type="text" value="{{ $student->birthCertificate }}" class="w-100"><br>
                  <label for="father" class="float-start">পিতা</label><br>
                  <input type="text" value="{{ $student->father }}" class="w-100"><br>
                  <label for="fNidNumber">পিতার NID কার্ডের নাম্বার</label><br>
                  <input type="text" value="{{ $student->fNidNumber }}" class="w-100"><br>
                  <label for="fatherDoB">পিতার জন্ম তারিখ</label><br>
                  <input type="text" value="{{ $student->fatherDoB }}" class="w-100"><br>
                  <label for="fatherOccupation" class="float-start">পিতা’র পেশা</label><br>
                  <input type="text" value="{{ $student->fatherOccupation }}" class="w-100"><br>
                  <label for="mother" class="float-start">মাতা</label><br>
                  <input type="text" value="{{ $student->mother }}" class="w-100"><br>
                  <label for="mNidNumber">মাতার NID কার্ডের নাম্বার</label><br>
                  <input type="text" value="{{ $student->mNidNumber }}" class="w-100"><br>
                  <label for="motherDoB">মাতার জন্ম তারিখ</label><br>
                  <input type="text" value="{{ $student->motherDoB }}" class="w-100"><br>
                  <label for="motherOccupation" class="float-start">মাতা’র পেশা</label><br>
                  <input type="text" value="{{ $student->motherOccupation }}" class="w-100"><br>
                  <label for="nationality" class="float-start">জাতীয়তা</label><br>
                  <input type="text" value="{{ $student->nationality }}" class="w-100"><br>
                  <label for="phone" class="float-start">মোবাইল</label><br>
                  <input type="text" value="{{ $student->phone }}" class="w-100"><br>
                  <label for="permanentAddress" class="float-start">স্থায়ী ঠিকানা</label><br>
                  <textarea class="w-100">{{ $student->permanentAddress }}</textarea><br>
                  <label for="currentAddress" class="float-start">বর্তমান ঠিকানা</label><br>
                  <textarea class="w-100">{{ $student->currentAddress }}</textarea><br>
                  <label for="referName" class="float-start">স্থানীয় অভিভাবকের নাম</label><br>
                  <input type="text" value="{{ $student->referName ?? 'None'}}" class="w-100"><br>
                  <label for="connectionWithRefer" class="float-start">সম্পর্ক</label><br>
                  <input type="text" value="{{ $student->connectionWithRefer ??'None'  }}" class="w-100"><br>
                  <label for="referAddress" class="float-start">স্থানীয় অভিভাবকের ঠিকানা</label><br>
                  <textarea class="w-100">{{ $student->referAddress ?? 'None'  }}</textarea>
              </form>
              </div>
            </div>
           </div>
        </div>
        @endforeach
    </section>
</div>