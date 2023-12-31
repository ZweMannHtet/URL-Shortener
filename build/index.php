<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Shortener URL</title>
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css" />
  <link rel="stylesheet" href="css/style.css" />
  <style>
    .info-box.error {
      color: #721c24;
      background: #f8d7da;
      border-color: #f5c6cb;
    }

    .popup-box.show {
      opacity: 1;
      visibility: visible;
      transform: translate(-50%, -50%) scale(1);
    }
  </style>
</head>

<body class="flex items-center justify-center min-h-screen p-3 bg-pale-blue">
  <div class="wrapper bg-white p-5 rounded-md w-custom">
    <form action="#" class="h-7 w-full flex items-center relative">
      <i class="url-icon uil uil-link absolute w-12 text-center text-2xl text-slate-500 pointer-events-none"></i>
      <input type="text" name="full_url" placeholder="Enter or paste a long url" class="h-full w-full py-5 pr-28 pl-11 focus:outline-none border-2 border-slate-300 rounded-md text-xl caret-pale-blue placeholder:text-gray valid:border-pale-blue transition-all duration-100 ease-in" required />
      <button class="absolute right-2 py-0.5 px-3 border-none text-white text-lg focus:outline-none rounded cursor-pointer bg-pale-blue">
        Shorten
      </button>
    </form>
    <div class="count my-5 mx-0 flex pr-1 justify-between items-center">
      <span class="text-lg">Total Links: <span class="font-normal">10</span> & Total Clicks:
        <span class="font-normal">140</span></span>
      <a href="" class="text-black hover:text-pale-blue">Clear All</a>
    </div>
    <div class="urls-area scrollbar-none border border-slate-300 rounded-md mb-1 max-h-96 overflow-y-scroll">
      <div class="title flex w-full justify-between">
        <li class="list-none w-full border-r border-solid border-pale-color text-center bg-li-back py-3 px-0 max-w-[30%]">
          Shorten URL
        </li>
        <li class="list-none w-full border-r border-solid border-pale-color text-center bg-li-back py-3 px-0 max-w-[45%]">
          Original URL
        </li>
        <li class="list-none w-full border-r border-solid border-pale-color text-center bg-li-back py-3 px-0 max-w-[11%]">
          Clicks
        </li>
        <li class="list-none w-full border-r border-solid border-pale-color text-center bg-li-back py-3 px-0 max-w-[14%]">
          Action
        </li>
      </div>
      <div class="data flex w-full justify-between odd:bg-li-back">
        <li class="list-none w-full border-r border-solid border-pale-color flex items-center justify-center py-2 px-3 break-all max-w-[30%]">
          <a href="" class="hover:text-pale-blue hover:underline">example.com/adbcd</a>
        </li>
        <li class="list-none w-full border-r border-solid border-pale-color flex items-center justify-center py-2 px-3 break-all max-w-[45%]">
          <a href="" class="">https://chat.openai.com/c/3a1661c0-858d-47e0-a141-20a459b88eab</a>
        </li>
        <li class="list-none w-full border-r border-solid border-pale-color flex items-center justify-center py-2 px-3 break-all max-w-[11%]">
          16
        </li>
        <li class="list-none w-full border-r border-solid border-pale-color flex items-center justify-center py-2 px-3 break-all max-w-[14%]">
          <a href="" class="h-full w-full flex items-center justify-center hover:text-pale-blue hover:underline">Delete</a>
        </li>
      </div>
    </div>
  </div>

  <div class="blur-effect absolute h-full w-full bg-[rgba(0,0,0,0.01)] backdrop-blur-sm top-0 left-0 hidden"></div>

  <div class="popup-box absolute bg-slate-50 p-6 rounded-md w-popup-width shadow-lg shadow-indigo-500/40 top-1/2 left-1/2 translate-x-[-50%] translate-y-[-50%] opacity-0 invisible transition-all duration-300 ease-in-out">
    <div class="info-box text-info-color bg-info-back border-1 border-slate-500 rounded-md p-3 text-xl text-center">
      Your short link is ready. You can also edit your short link now but
      can't edit once you saved it
    </div>
    <form action="#" class="w-full items-center mt-3 relative">
      <label class="text-lg">Edit your shorten url</label>
      <input type="text" spellcheck="false" value="example.com/adbcd" class="h-11 w-full pt-0 pr-9 pb-0 pl-4 mt-1 focus:outline-none border-2 border-slate-300 rounded-md text-xl caret-pale-blue placeholder:text-gray valid:border-pale-blue transition-all duration-100 ease-in" />
      <i class="copy-icon uil uil-copy-alt absolute w-12 text-center text-xl text-slate-500 cursor-pointer right-1 top-1/2 transform translate-y-[-80%]"></i>
      <button class="relative py-1 right-0 mt-3 w-full text-white text-lg rounded cursor-pointer bg-pale-blue">
        Save
      </button>
    </form>
  </div>

  <script src="script.js"></script>
</body>

</html>