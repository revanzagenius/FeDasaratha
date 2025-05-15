using Microsoft.AspNetCore.Mvc;

namespace matoxi.Controllers
{
	public class PagesController : Controller
	{
		public IActionResult Faq()
		{
			return View();
		}
		public IActionResult Pricing()
		{
			return View();
		}
		public IActionResult Profile()
		{
			return View();
		}
		public IActionResult Starter()
		{
			return View();
		}
		public IActionResult Timeline()
		{
			return View();
		}
        public IActionResult E404()
        {
            return View();
        }
        public IActionResult E505()
        {
            return View();
        }
        public IActionResult Comingsoon()
        {
            return View();
        }
    }
}
