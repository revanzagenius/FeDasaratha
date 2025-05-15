using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace mvc.Controllers
{
    public class WidgetsController : Controller
    {
        // GET: Widgets
        public ActionResult Advance()
        {
            return View();
        }
        public ActionResult Data()
        {
            return View();
        }
    }
}