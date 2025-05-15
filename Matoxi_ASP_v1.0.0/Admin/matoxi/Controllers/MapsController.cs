using Microsoft.AspNetCore.Mvc;

namespace matoxi.Controllers
{
	public class MapsController : Controller
	{
		public IActionResult Google()
		{
			return View();
		}
		public IActionResult Vector()
		{
			return View();
		}
	}
}
