using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace mvc.Controllers
{
    public class ChartsController : Controller
    {
        // GET: Charts
        public ActionResult Apex()
        {
            return View();
        }
        public ActionResult Chartjs()
        {
            return View();
        }
    }
}