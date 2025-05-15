using Microsoft.AspNetCore.Mvc;

namespace matoxi.Controllers
{
	public class WidgetsController : Controller
	{
		public IActionResult Advance()
		{
			return View();
		}
		public IActionResult Data()
		{
			return View();
		}
	}
}
