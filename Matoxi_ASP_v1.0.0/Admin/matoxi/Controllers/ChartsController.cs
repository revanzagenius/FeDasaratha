using Microsoft.AspNetCore.Mvc;

namespace matoxi.Controllers
{
	public class ChartsController : Controller
	{
		public IActionResult Apex()
		{
			return View();
		}
		public IActionResult Chartjs()
		{
			return View();
		}
	}
}
