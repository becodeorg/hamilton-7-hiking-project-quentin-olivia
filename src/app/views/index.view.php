<div class="section-hikes mb-32 text-gray-800 text-center md:text-left">
    
    <h2 class="text-3xl font-bold mb-12 text-center my-12">Our hikes</h2>
    
    <?php foreach ($hikes as $hike) : ?>
    <div class="flex flex-wrap mb-6">
      <div class="grow-0 shrink-0 basis-auto w-full md:w-3/12 px-3 mb-6 md:mb-0 ml-auto">
        <div
          class="relative overflow-hidden bg-no-repeat bg-cover relative overflow-hidden bg-no-repeat bg-cover ripple shadow-lg rounded-lg mb-6"
          data-mdb-ripple="true" data-mdb-ripple-color="light">
          <img src="https://mdbootstrap.com/img/new/standard/city/018.jpg"
            class="w-full" alt="Louvre" />
          <a href="#!">
            <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
              style="background-color: rgba(251, 251, 251, 0.2)"></div>
          </a>
        </div>
      </div>

      <div class="grow-0 shrink-0 basis-auto w-full md:w-9/12 xl:w-7/12 px-3 mb-6 md:mb-0 mr-auto">
        <h5 class="text-lg font-bold mb-3">
            <a href="/hike?id=<?= $hike['id']; ?>">
                <span><?= $hike['name'] ?></span>
            </a>
        </h5>
        <div class="mb-3 text-lime-500 font-medium text-sm flex items-center justify-center md:justify-start">
            <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                <path fill="currentColor" d="M248 8C111.03 8 0 119.03 0 256s111.03 248 248 248 248-111.03 248-248S384.97 8 248 8zm82.29 357.6c-3.9 3.88-7.99 7.95-11.31 11.28-2.99 3-5.1 6.7-6.17 10.71-1.51 5.66-2.73 11.38-4.77 16.87l-17.39 46.85c-13.76 3-28 4.69-42.65 4.69v-27.38c1.69-12.62-7.64-36.26-22.63-51.25-6-6-9.37-14.14-9.37-22.63v-32.01c0-11.64-6.27-22.34-16.46-27.97-14.37-7.95-34.81-19.06-48.81-26.11-11.48-5.78-22.1-13.14-31.65-21.75l-.8-.72a114.792 114.792 0 0 1-18.06-20.74c-9.38-13.77-24.66-36.42-34.59-51.14 20.47-45.5 57.36-82.04 103.2-101.89l24.01 12.01C203.48 89.74 216 82.01 216 70.11v-11.3c7.99-1.29 16.12-2.11 24.39-2.42l28.3 28.3c6.25 6.25 6.25 16.38 0 22.63L264 112l-10.34 10.34c-3.12 3.12-3.12 8.19 0 11.31l4.69 4.69c3.12 3.12 3.12 8.19 0 11.31l-8 8a8.008 8.008 0 0 1-5.66 2.34h-8.99c-2.08 0-4.08.81-5.58 2.27l-9.92 9.65a8.008 8.008 0 0 0-1.58 9.31l15.59 31.19c2.66 5.32-1.21 11.58-7.15 11.58h-5.64c-1.93 0-3.79-.7-5.24-1.96l-9.28-8.06a16.017 16.017 0 0 0-15.55-3.1l-31.17 10.39a11.95 11.95 0 0 0-8.17 11.34c0 4.53 2.56 8.66 6.61 10.69l11.08 5.54c9.41 4.71 19.79 7.16 30.31 7.16s22.59 27.29 32 32h66.75c8.49 0 16.62 3.37 22.63 9.37l13.69 13.69a30.503 30.503 0 0 1 8.93 21.57 46.536 46.536 0 0 1-13.72 32.98zM417 274.25c-5.79-1.45-10.84-5-14.15-9.97l-17.98-26.97a23.97 23.97 0 0 1 0-26.62l19.59-29.38c2.32-3.47 5.5-6.29 9.24-8.15l12.98-6.49C440.2 193.59 448 223.87 448 256c0 8.67-.74 17.16-1.82 25.54L417 274.25z"/>
            </svg>
            <span>Travels</span>
            <svg width="18px" height="18px" viewBox="0 0 32 32" id="Lager_44" data-name="Lager 44" xmlns="http://www.w3.org/2000/svg" class="ml-5 mr-2">
                <g id="Group_15" data-name="Group 15">
                    <path fill="currentColor" id="Path_51" data-name="Path 51" d="M16,0A16,16,0,1,0,32,16,16,16,0,0,0,16,0Zm0,28A12,12,0,1,1,28,16,12.013,12.013,0,0,1,16,28Z" fill="#040505"/>
                    <path fill="currentColor" id="Path_52" data-name="Path 52" d="M20.02,16H17a1,1,0,0,1-1-1V11.98A1.979,1.979,0,0,0,14.02,10h-.04A1.979,1.979,0,0,0,12,11.98v6.04A1.979,1.979,0,0,0,13.98,20h6.04A1.979,1.979,0,0,0,22,18.02v-.04A1.979,1.979,0,0,0,20.02,16Z" fill="#040505"/>
                </g>
            </svg>
            <span><?= $hike['duration'] ?></span>
            <svg width="18px" height="18px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" 	viewBox="0 0 402.641 402.641" style="enable-background:new 0 0 402.641 402.641;" xml:space="preserve" class="ml-5 mr-2">
                <path fill="currentColor" d="M399.415,342.027L296.775,211.991c-2.845-3.604-7.184-5.706-11.774-5.706c-4.591,0-8.93,2.103-11.774,5.706l-24.545,31.097
                L180,156.078v-29.758h55.049c8.284,0,15-6.716,15-15v-60c0-8.284-6.716-15-15-15h-70c-0.008,0-0.016,0.001-0.024,0.001
                c-0.009,0-0.017-0.001-0.024-0.001c-8.284,0-15,6.716-15,15v104.758L3.227,342.027c-3.563,4.513-4.233,10.663-1.725,15.836
                c2.507,5.173,7.75,8.458,13.498,8.458h167.36h0.001h205.279c5.748,0,10.991-3.285,13.498-8.458
                C403.646,352.69,402.977,346.539,399.415,342.027z M165,185.495l32.225,40.825h-64.449L165,185.495z M180.049,66.321h40v30h-40
                V66.321z M109.096,256.321h111.809l8.666,10.979l-54.48,69.021H45.95L109.096,256.321z M213.31,336.321L285,245.495l71.69,90.825
                H213.31z"/>
            </svg>
            <span><?= $hike['elevation_gain'] ?>m</span>
            <svg width="18px" height="18px" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 490.1 490.1" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 490.1 490.1" class="ml-5 mr-2">
                <g>
                    <g>
                    <path fill="currentColor" d="m447.25,360.1l-187.7-49.1 165.8-33.9-4.2-21.8-210.6,43.7c-13,2.8-9.4,20.9 0,21.8l168.9,44.8-191.8,13.1c-10.5,1.5-12.6,13.3-6.3,19.7l62.6,59-136.6,10.9 1,21.8 159.5-13.1c7.7,0.6 14.9-11.2 6.3-19.7l-61.5-59 233.5-16.4c11.5-0.5 12.8-18.6 1.1-21.8z"/>
                    <path fill="currentColor" d="m460.85,81.8c0-27.2-21.9-49.2-49-49.2s-49,22-49,49.2 21.9,49.2 49,49.2c26.1,0 49-22 49-49.2zm-77.1,1c0-15.7 12.5-28.3 28.1-28.3 14.6,0 28.1,11.5 28.1,27.2s-12.5,28.3-28.1,28.3c-15.6,0-28.1-11.5-28.1-27.2z"/>
                    <path fill="currentColor" d="m490.05,78.6c0-44-35.4-78.6-78.2-78.6-42.7,0-78.2,34.6-78.2,78.6 0,43.9 78.2,161.3 78.2,161.3s78.2-117.4 78.2-161.3zm-78.2-57.6c32.3,0 57.3,26.2 57.3,57.6 0,25.1-36.5,88-57.3,122.6-20.8-34.6-57.3-97.4-57.3-122.6 0-31.4 25-57.6 57.3-57.6z"/>
                    <path fill="currentColor" d="m78.25,269.9c-27.1,0-49,22-49,49.2s21.9,49.2 49,49.2c26.1,0 49-22 49-49.2s-21.9-49.2-49-49.2zm0,77.6c-15.6,0-28.1-11.5-28.1-27.2s12.5-28.3 28.1-28.3c14.6,0 28.1,11.5 28.1,27.2 0,15.7-12.5,28.3-28.1,28.3z"/>
                    <path fill="currentColor" d="m78.25,237.5c-42.7,0-78.2,34.6-78.2,78.6 0,43.9 78.2,161.3 78.2,161.3s78.2-117.4 78.2-161.3c0-44.1-35.5-78.6-78.2-78.6zm-57.3,78.5c-3.55271e-15-31.4 25-57.6 57.3-57.6s57.3,26.2 57.3,57.6c0,25.1-36.5,88-57.3,122.6-20.9-34.6-57.3-97.4-57.3-122.6z"/>
                    </g>
                </g>
            </svg>
            <span><?= $hike['distance'] ?>km</span>
        </div>
        <p class="text-gray-500 mb-6">
          <small>Published <u><?= $hike['date'] ?></u> by
            <a href="" class="text-gray-900">Anna Maria Doe</a></small>
        </p>
        <p class="text-gray-500">
            <?= $hike['description'] ?>
        </p>
      </div>
    </div>
    <?php endforeach; ?>
</div>