<div class="relative overflow-hidden pt-10" id="kontak">
    <img src="assets/1.jpg" class="absolute right-0 top-0 h-full overflow-hidden w-full object-cover z-[-1]"/>
    <div class="container ">
      <div class="bg-white/80 backdrop-blur-sm  rounded-t-xl">
        <div class="text-center">
          <h1 class=" py-4 text-3xl font-bold">Kontak Kami</h1>
        </div>
          <div class="grid-cols-1 lg:grid-cols-2 grid  ">
            <div class="px-4">
            <h2 class="font-bold uppercase text-xl">Gitj Puncel</h2>
              <p class="text-lg text-justify">{{$info->alamat}}</p>
              <div>
                <div class="flex mt-2 gap-1 items-center">
                  <a href={{'https://wa.me/'.$info->wa.'?text=Halo%20Admin'}} >
                    <svg class="w-6 h-6 text-primary" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                      <path fill="currentColor" fill-rule="evenodd" d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z" clip-rule="evenodd"/>
                      <path fill="currentColor" d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z"/>
                    </svg>                    
                  </a>
                  <p class="text-lg">{{$info->wa}}</p>
                </div>
                <div class="flex mt-2 gap-1 items-center">
                  <a href={{'https://facebook.com/'. $info->fb}}>
                    <svg class="w-6 h-6 text-primary" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                      <path fill-rule="evenodd" d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z" clip-rule="evenodd"/>
                    </svg>
                  </a>
                  <p class="text-lg">{{$info->fb}}</p>
                </div>
                
              </div>
            </div>
            <div class="">
              <div class="flex items-center justify-center py-2">
                <iframe class="rounded-xl shadow-md lg:w-[625px] lg:h-[240px] md:w-[500px] md:h-[200px]  w-[340px] h-[200px]" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.6201041256627!2d110.98030951051047!3d-6.4428022935215905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e713174414da7ad%3A0x72bf63a99e1992e1!2sGITJ%20Puncel!5e0!3m2!1sid!2sid!4v1741419591743!5m2!1sid!2sid"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
      </div>
      <div>
        <div class="text-center text-sm py-2 border-t-2 border-gray-300/50 bg-primary text-white">Copyright © GITJ Puncel 2025</div>
      </div>
    </div>
  </div>