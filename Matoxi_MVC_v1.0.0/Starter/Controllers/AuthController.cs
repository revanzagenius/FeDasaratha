using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace mvc.Controllers
{
    public class AuthController : Controller
    {
        // GET: Auth
        public ActionResult Basiclogin()
        {
            return View();
        }
        public ActionResult Basicregister()
        {
            return View();
        }
        public ActionResult Basicforgot()
        {
            return View();
        }
        public ActionResult Basicreset()
        {
            return View();
        }


        public ActionResult Coverlogin()
        {
            return View();
        }
        public ActionResult Coverregister()
        {
            return View();
        }
        public ActionResult Coverforgot()
        {
            return View();
        }
        public ActionResult Coverreset()
        {
            return View();
        }


        public ActionResult Boxedlogin()
        {
            return View();
        }
        public ActionResult Boxedregister()
        {
            return View();
        }
        public ActionResult Boxedforgot()
        {
            return View();
        }
        public ActionResult Boxedreset()
        {
            return View();
        }
    }
}