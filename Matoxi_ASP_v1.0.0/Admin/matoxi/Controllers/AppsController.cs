using Microsoft.AspNetCore.Mvc;

namespace matoxi.Controllers
{
	public class AppsController : Controller
	{
		public IActionResult Calender()
		{
			return View();
		}
		public IActionResult Invoice()
		{
			return View();
		}
		public IActionResult Todo()
		{
			return View();
		}
	}
}
