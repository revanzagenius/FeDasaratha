using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace mvc.Controllers
{
    public class IconsController : Controller
    {
        // GET: Icons
        public ActionResult Boxicons()
        {
            return View();
        }
        public ActionResult Feather()
        {
            return View();
        }
        public ActionResult Line()
        {
            return View();
        }
    }
}